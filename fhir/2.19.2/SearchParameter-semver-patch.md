# semver-patch - KIP Infrastructure v2.19.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **semver-patch**

## SearchParameter: semver-patch 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/SearchParameter/semver-patch | *Version*:2.19.2 |
| Active as of 2026-03-04 | *Computable Name*:semver-patch |

 
Patch version number extracted from version field. 



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "semver-patch",
  "url" : "https://kip.rkkp.dk/fhir/SearchParameter/semver-patch",
  "version" : "2.19.2",
  "name" : "semver-patch",
  "status" : "active",
  "date" : "2026-03-04T14:39:18+00:00",
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
