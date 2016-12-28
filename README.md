# Session Interoperability

*session-configuration-interop* tries to identify and standardize features of *session* configuration to achieve interoperability between PHP package. It does represent the configuration of the session.

Through discussions and trials, we try to create a standard, made of common interfaces but also recommendations.

## Installation

You can install this package through Composer:

```json
composer require session-interop/session-configuration-interop
```
The packages adheres to the [SemVer](http://semver.org/) specification, and there will be full backward compatibility between minor versions.

## Implementations

[`DefaultSessionConfiguration`](https://github.com/session-interop/utils-configuration-session)

A basic implementation of the interface.
