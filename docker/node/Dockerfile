FROM node:18-alpine

RUN apk update && apk upgrade
RUN apk add git npm

RUN mkdir -p /usr/src/app

COPY ./ /usr/src/app

WORKDIR /usr/src/app
EXPOSE 3000
RUN npm install
# RUN npm run dev

# RUN npm install -g
# RUN ls

# ENV NUXT_HOST=0.0.0.0
# ENV NUXT_PORT=3000

CMD [ "npm", "run dev" ]
