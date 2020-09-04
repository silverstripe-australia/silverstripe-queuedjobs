# SilverStripe Queued Jobs Module

[![Build Status](https://travis-ci.org/symbiote/silverstripe-queuedjobs.svg?branch=master)](https://travis-ci.org/symbiote/silverstripe-queuedjobs)
[![Scrutinizer](https://scrutinizer-ci.com/g/symbiote/silverstripe-queuedjobs/badges/quality-score.png)](https://scrutinizer-ci.com/g/symbiote/silverstripe-queuedjobs/)
[![SilverStripe supported module](https://img.shields.io/badge/silverstripe-supported-0071C4.svg)](https://www.silverstripe.org/software/addons/silverstripe-commercially-supported-module-list/)

## Overview

The Queued Jobs module provides a framework for SilverStripe developers to
define long running processes that should be run as background tasks.
This asynchronous processing allows users to continue using the system
while long running tasks proceed when time permits. It also lets
developers set these processes to be executed in the future.

The module comes with

* A section in the CMS for viewing a list of currently running jobs or scheduled jobs.
* An abstract skeleton class for defining your own jobs.
* A task that is executed as a cronjob for collecting and executing jobs.
* A pre-configured job to cleanup the QueuedJobDescriptor database table.

## Installation

```
composer require symbiote/silverstripe-queuedjobs
```

Now setup a cron job:

```
*/1 * * * * /path/to/silverstripe/vendor/bin/sake dev/tasks/ProcessJobQueueTask
```

See [Installation](docs/en/installation.md) for further instructions.

## Version info

The master branch of this module is currently aiming for SilverStripe 4.x compatibility

* [SilverStripe 3.1+ compatible version](https://github.com/symbiote/silverstripe-queuedjobs/tree/2.9)
* [SilverStripe 3.0 compatible version](https://github.com/symbiote/silverstripe-queuedjobs/tree/1.0)
* [SilverStripe 2.4 compatible version](https://github.com/symbiote/silverstripe-queuedjobs/tree/ss24)

## Documentation



## Contributing

### Translations

Translations of the natural language strings are managed through a third party translation interface, transifex.com. Newly added strings will be periodically uploaded there for translation, and any new translations will be merged back to the project source code.

Please use [https://www.transifex.com/projects/p/silverstripe-queuedjobs](https://www.transifex.com/projects/p/silverstripe-queuedjobs) to contribute translations, rather than sending pull requests with YAML files.
