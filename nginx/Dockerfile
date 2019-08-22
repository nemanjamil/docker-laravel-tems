ARG ARG_LATEST
# call argument $ARG_LATEST
# nginx
FROM nginx:$ARG_LATEST
# RUN rm /etc/nginx/conf.d/default.conf
CMD ["nginx", "-g", "daemon off;"]

EXPOSE 80 443