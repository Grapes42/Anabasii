# Anabassi
### Simple large file sharer
[![CodeFactor](https://www.codefactor.io/repository/github/grapes42/anabasii/badge)](https://www.codefactor.io/repository/github/grapes42/anabasii)

## Table of contents
- [Description](#description)
- [Usage](#usage)
- [Setup](#setup)
- [Disclaimer](#disclaimer)
- [Support](#support)
- [Authors and acknowledgements](#authors-and-acknowledgements)

## Description
Anabasii gets its name from Ancient Roman messengers who delivered messages over long distances on chariots.

It is a small open-source project for sharing larger video and other media that are too big to be shared via other communication programs.

It runs on a little pi zero apache server, and uses PHP to upload files. It will temporarilly store the files on the server and generate a link for you to share your uploads with others.

The current limit allows files a maximum of 1gb in size.

## Usage

The process for using Anabasii is designed to be as simple to use as possible.

Here is a list of step by step instructions to use the program:

1. Go to [Anabasii](http://anabasii.ddns.net).
2. Select the **"Browse"** button and chose a file to upload.
3. Once selected press the **"Upload"** button to generate a link to share with your friends.
4. Copy the link and paste it into chat so they can click it.

Done! Your link will last anywhere from a couple of weeks to a couple of months. This depends how much use the website receives.

## Setup

#### Incase you want to host your own

Setup instructions for Raspbian or other Debian distros.
```
$ sudo su -
$ apt update && apt upgrade
$ apt install apache2 
$ apt install php7.3 php7.3-fpm && a2enmod proxy_fcgi setenvif
$ git clone https://github.com/Grapes42/Anabasii.git /var/www/html
$ chmod -R 777 /var/www/html/uploads
$ cp /var/www/html/setupFiles/000-default.conf /etc/apache2/sites-available/000-default.conf
$ cp /var/www/html/setupFiles/startup.sh /etc/init.d/startup.sh
$ cp /var/www/html/setupFiles/php.ini /etc/php/7.3/fpm/php.ini
$ reboot
```
Then port forward your server and get a domain name.

## Disclaimer

#### Please don't bully my pi
He's just a little pi zero and isn't the strongest (but he's doing his best!).

There will be an upgrade to him in the future (dont tell him, it'll make him sad), allowing my program to achieve faster upload and displaying speeds.

## Support

If you need help because the program is not working correctly or you want to suggest a new feature you can either send an email to **st20156@howick.school.nz**, or submit a bug report on GitHub **[here](https://github.com/Grapes42/Anabasii/issues/new)**. When you are doing this please try to give a description of what you were doing at the time the problem occured and I will attempt to recreate the problem and then fix the bug or a good description of what you want added to the program.

Before submiting a bug report it may just be that I was in the process of doing something with my pi or it is powered off. But I will do my best to have my server up as much as possible.

## Authors and acknowledgements
Authors:
- Max Dowdall (Grapes42)

Acknowlegements:
- Stackoverflow
- Google
- [Masterbond7 (the README bloke)](https://github.com/Masterbond7)
- [Dani Krossing (PHP Upload Code)](https://www.youtube.com/channel/UCzyuZJ8zZ-Lhfnz41DG5qLw)
- [Tony Teaches Tech (Apache and PHP setup)](https://www.youtube.com/channel/UCWPJwoVXJhv0-ucr3pUs1dA)
