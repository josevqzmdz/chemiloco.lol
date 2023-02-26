import { Application, Request, Response } from 'express';
import { ApolloServer, Config, gql } from 'apollo-server-express';
import { IResolvers } from '@graphql-tools/utils';
import http = require('http');
import express = require('express');
import { schema } from './graphql/src/graphql/schema';
// pg 53
const PORT = 8080;

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

// finally, start apollo server:
async function startApolloServer(config: Config){
    const PORT = 8080;
    const app: Application = express();
    // https://stackoverflow.com/questions/62415099/how-do-i-fix-this-typescript-and-graphql-error
    // I figured out a way around it by assigning schema to type of any const schema: any = mergeSchemas({ schema });

    const schema1: any = ({ schema });
    const server: ApolloServer = new ApolloServer(schema1);
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