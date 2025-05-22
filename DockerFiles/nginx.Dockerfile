# DockerFiles/nginx.Dockerfile
FROM nginx:latest
COPY DockerFiles/nginx/default.conf /etc/nginx/conf.d/default.conf
EXPOSE 80
CMD ["nginx", "-g", "daemon off;"]
