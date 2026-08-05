# semver-minor - KIP Infrastructure v2.24.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **semver-minor**

## SearchParameter: semver-minor 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/SearchParameter/semver-minor | *Version*:2.24.0 |
| Active as of 2026-08-05 | *Computable Name*:semver-minor |

 
Minor version number extracted from version field. 



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "semver-minor",
  "url" : "https://kip.rkkp.dk/fhir/SearchParameter/semver-minor",
  "version" : "2.24.0",
  "name" : "semver-minor",
  "status" : "active",
  "date" : "2026-08-05T12:34:48+00:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [{
    "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
    "telecom" : [{
      "system" : "url",
      "value" : "https://trifork.com"
    },
    {
      "system" : "email",
      "value" : "rbk@trifork.com"
    }]
  }],
  "description" : "Minor version number extracted from version field.",
  "code" : "semver-minor",
  "base" : ["StructureDefinition",
  "ValueSet",
  "CodeSystem",
  "ImplementationGuide"],
  "type" : "number",
  "expression" : "version.split('.')[1].toInteger()"
}

```
