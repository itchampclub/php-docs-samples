# Google DLP PHP Sample Application

## Description

This simple command-line application demonstrates how to invoke Google
DLP API from PHP.

## Build and Run
1.  **Enable APIs** - [Enable the DLP API](
    https://console.cloud.google.com/flows/enableapi?apiid=dlp.googleapis.com)
    and create a new project or select an existing project.
2.  **Download The Credentials** - Click "Go to credentials" after enabling the APIs. Click
    "New Credentials"
    and select "Service Account Key". Create a new service account, use the JSON key type, and
    select "Create". Once downloaded, set the environment variable `GOOGLE_APPLICATION_CREDENTIALS`
    to the path of the JSON key that was downloaded.
3.  **Clone the repo** and cd into this directory
```
    $ git clone https://github.com/GoogleCloudPlatform/php-docs-samples
    $ cd php-docs-samples/dlp
```
4.  **Install dependencies** via [Composer](http://getcomposer.org/doc/00-intro.md).
    Run `php composer.phar install` (if composer is installed locally) or `composer install`
    (if composer is installed globally).
5.  Run `php dlp.php`. The following commands are available:

    ```
    help   Displays help for a command
    list   Lists commands
    shots  Detect shot changes in dlp using Google Cloud DLP API
    ```

    Example:

    ```
    $ php dlp.php inspect-string 'Robert Frost'
    Findings:
      Quote: Robert
      Info type: US_MALE_NAME
      Likelihood: Very likely
    ```


6. Run `php dlp.php COMMAND --help` to print information about the usage of each command.

## Contributing changes

* See [CONTRIBUTING.md](../../CONTRIBUTING.md)

## Licensing

* See [LICENSE](../../LICENSE)
