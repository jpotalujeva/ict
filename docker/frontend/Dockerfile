FROM node:14

WORKDIR /var/www/
COPY . .
COPY package.json ./
COPY package-lock.json ./

RUN npm install

CMD ["npm", "run", "dev"]