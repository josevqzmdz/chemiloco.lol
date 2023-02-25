import { IResolvers } from '@graphql-tools/utils';
const resolvers: IResolvers = {
    Query: {
        message: () => 'hello world'
    }
};
export default resolvers;