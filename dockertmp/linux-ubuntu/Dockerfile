ARG VERSION=1.0

#step:1 基礎image
FROM ubuntu:22.04 as base
RUN apt update && apt upgrade -y

#step:2 安裝基礎工具 vim ftp ssh 並聲明port
EXPOSE 21 22 80
RUN apt install -y openssh-server net-tools vim

CMD ["/bin/bash"]