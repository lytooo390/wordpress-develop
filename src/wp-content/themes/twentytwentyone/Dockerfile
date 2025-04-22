FROM node:lts-alpine@sha256:9b6b3f3e2f3e8b8f5e3c5c5b5e3c5c5b5e3c5c5b5e3c5c5b5e3c5c5b5e3c5c5
ENV NODE_ENV=production
WORKDIR /usr/src/app
COPY ["package.json", "package-lock.json*", "npm-shrinkwrap.json*", "./"]
RUN npm install --production --silent && mv node_modules ../
COPY . .
EXPOSE 3000
RUN chown -R node /usr/src/app
USER node
CMD ["npm", "start"]
