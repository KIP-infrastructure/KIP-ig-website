# semver-patch - KIP Infrastructure v1.25.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **semver-patch**

## SearchParameter: semver-patch 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/SearchParameter/semver-patch | *Version*:1.25.1 |
| Active as of 2026-09-09 | *Computable Name*:semver-patch |

 
Patch version number extracted from version field. 



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "semver-patch",
  "url" : "https://kip.rkkp.dk/fhir/SearchParameter/semver-patch",
  "version" : "1.25.1",
  "name" : "semver-patch",
  "status" : "active",
  "date" : "2026-09-09T09:19:34+00:00",
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
  "description" : "Patch version number extracted from version field.",
  "code" : "semver-patch",
  "base" : ["StructureDefinition",
  "ValueSet",
  "CodeSystem",
  "ImplementationGuide"],
  "type" : "number",
  "expression" : "version.split('.')[2].toInteger()"
}

```
