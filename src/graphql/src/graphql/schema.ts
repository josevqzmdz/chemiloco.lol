// page 53 full stack dev with angular and graphql
import fs from 'fs';
import { GraphQLSchema } from 'graphql';
import { makeExecutableSchema } from '@graphql-tools/schema';
import { gql } from 'apollo-server-express';
import resolvers from './resolvers';

/*
Here, we read the query from the .graphql file using the readFileSync
method imported from the fs module and imported the resolvers from
the resolvers.ts file using the import statement. Next, we called the
makeExecutableSchema with the typeDefs and resolvers arguments to
create a schema that we can export from our schema.ts file.
*/

        export function schema(): GraphQLSchema {
            const typeDefs = gql`${fs.readFileSync(
                __dirname.concat('/schema.graphql'), 'utf8')}`;
                const schema: GraphQLSchema = makeExecutableSchema({
                typeDefs,
                resolvers,
            });  
        // cannot use namepsace ""
        // https://codingbeautydev.com/blog/typescript-cannot-use-namespace-as-a-type/
        // To fix this error, use an export assignment to specify a default export for the namespace, like this:
        return schema;
    }
