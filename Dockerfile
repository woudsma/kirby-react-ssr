FROM node:alpine as builder

WORKDIR /tmp
ADD site/src/package.json site/src/package-lock.json ./
RUN npm install --only=production
ADD site/src ./
RUN npm run make
RUN rm -rf node_modules

FROM jerev/docker-php-apache-v8js
WORKDIR /app
ADD . .
COPY --from=builder /tmp site/src

RUN chown -R application:application /app
