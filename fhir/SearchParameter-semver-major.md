# semver-major - KIP Infrastructure v1.25.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **semver-major**

## SearchParameter: semver-major 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/SearchParameter/semver-major | *Version*:1.25.1 |
| Active as of 2026-09-09 | *Computable Name*:semver-major |

 
Major version number extracted from version field. 



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "semver-major",
  "url" : "https://kip.rkkp.dk/fhir/SearchParameter/semver-major",
  "version" : "1.25.1",
  "name" : "semver-major",
  "status" : "active",
  "date" : "2026-09-09T09:26:10+00:00",
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
  "description" : "Major version number extracted from version field.",
  "code" : "semver-major",
  "base" : ["StructureDefinition",
  "ValueSet",
  "CodeSystem",
  "ImplementationGuide"],
  "type" : "number",
  "expression" : "version.split('.')[0].toInteger()"
}

```
