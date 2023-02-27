import { Application, Request, Response } from 'express';
import { ApolloServer, Config, gql } from 'apollo-server-express';
import { IResolvers } from '@graphql-tools/utils';
import http = require('http');
import express = require('express');
import { schema } from './graphql/src/graphql/schema';
// pg 53
const PORT = 8080;
//import { GraphQLSchema } from 'graphql';

// pg 58
/*  
Posts should belong to users, so they should be linked to users via the user field. However,
the randomly generated value of the field is not guaranteed to be one of the values that's
generated for the users' identifiers. We can solve this easily by defining two arrays before
the mocked object in the src/index.ts file, as follows:
*/

let postsIds: string[] = [];
let usersIds: string[] = [];

import casual from 'casual';
const mocks = {
    User: () => ({
        id: () => {let uuid = casual.uuid; usersIds.push(uuid);
            return uuid},
        fullName: casual.full_name,
        bio: casual.text,
        email: casual.email,
        username: casual.username,
        password: casual.password,
        image: 'https://picsum.photos/seed/picsum/200/300',
        coverImage:
        'https://picsum.photos/seed/picsum/200/300',
        postsCount: () => casual.integer(0)
        }),
    Post: () => ({
        id: () => {let uuid = casual.uuid; postsIds.push(uuid);
            return uuid},
        text: casual.text,
        image: 'https://picsum.photos/seed/picsum/200/300',
        author: casual.random_element(usersIds),
        commentsCount: () => casual.integer(0),
            likesCount: () => casual.integer(0),
            latestLike: casual.first_name,
            createdAt: () => casual.date()
            }),
    Comment: () => ({
            id: casual.uuid,
            comment: casual.text,
            post: casual.uuid,
            author: casual.random_element(usersIds),
            createdAt: () => casual.date()
                }),
                Like: () => ({
                    id: casual.uuid,
                    post: casual.uuid,
                    user: casual.random_element(usersIds),
                }),
                Query: () =>({
                        getPostsByUserId: () =>
                        [...new Array(casual.integer(10, 100))],
                        getFeed: () => [...new Array(casual.integer(10, 100))],
                        getNotificationsByUserId: () =>
                        [...new Array(casual.integer(10, 100))],
                        getCommentsByPostId: () =>
                        [...new Array(casual.integer(10, 100))],
                        getLikesByPostId: () =>
                        [...new Array(casual.integer(10, 100))],
                        searchUsers: () =>
                        [...new Array(casual.integer(10, 100))]
                    })
};

// page 29 full stack with angular and graphql
const typeDefs = gql`type Query { message: String! }`;

// add resolver
const resolvers: IResolvers = {
    Query: {
        message: () => 'it works'
    }
};

// add config file
const config: Config = {
    typeDefs: typeDefs,
    resolvers: resolvers
};

/* 
These arrays will allow us to keep track of the generated identifiers for users and posts
to ensure that the user and post fields of the Post, Comment, and Like types receive
one of these values. This way, our generated data will be more realistic and similar to a
real-world example.
Next, change the generator for the id field on the mock User object to the following
function:
*/

// finally, start apollo server:
async function startApolloServer(config: Config){
    const PORT = 8080;
    const app: Application = express();
    // https://stackoverflow.com/questions/62415099/how-do-i-fix-this-typescript-and-graphql-error
    // I figured out a way around it by assigning schema to type of any const schema: any = mergeSchemas({ schema });
           
    let schema1 = schema();
    const server: ApolloServer = new ApolloServer({schema: schema1 , mocks, mockEntireSchema: false } );
    await server.start();
    server.applyMiddleware(
        {
            app,
            path: '/graphql'
        }
    );
    app.listen(PORT, () => 
        {
            console.log('Server is running at http://localhost:${PORT}');
        }
    );
}
startApolloServer(config);

/*
var app: Application = express();
app.get('/', (req: Request, res: Response) => {
    res.send('Express is successfully running!')
});
app.listen(PORT, () => {
    console.log('Server is running at http://localhost:${PORT}')
},);
*/