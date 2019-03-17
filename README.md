# [colorcode-org-za](https://colorcode.org.za)
This is a statically generated site, created using jekyll

## Structure
Currently, having just moved the site over, the entirety of the site sits in [`_layouts/default.html`](./_layouts/default.html).

## Developer
For docs see the [official documentation](https://jekyllrb.com/docs/)

To run and develop the site locally:

1. Install a full Ruby development environment
1. Install Jekyll and bundler gems:
    ```bash
    $ gem install jekyll bundler
    ```
1. clone and open this repo
    ```bash
    $ git clone git@github.com:color-code/colorcode-org-za.git
    $ cd colorcode-org-za
    ```
1. Build the site and make it available on a local server
    ```bash
    $ bundle exec jekyll serve
    ```
    As you make changes, the site will automatically rebuild itself.
