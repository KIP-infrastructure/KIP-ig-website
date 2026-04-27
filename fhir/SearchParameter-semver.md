# semver - KIP Infrastructure v2.19.4

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **semver**

## SearchParameter: semver 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/SearchParameter/semver | *Version*:2.19.4 |
| Active as of 2026-04-27 | *Computable Name*:semver |

 
Composite search parameter representing semantic version (major.minor.patch) extracted from version field. 



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "semver",
  "url" : "https://kip.rkkp.dk/fhir/SearchParameter/semver",
  "version" : "2.19.4",
  "name" : "semver",
  "status" : "active",
  "date" : "2026-04-27T08:01:27+00:00",
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
  "description" : "Composite search parameter representing semantic version (major.minor.patch) extracted from version field.",
  "code" : "semver",
  "base" : ["StructureDefinition",
  "ValueSet",
  "CodeSystem",
  "ImplementationGuide"],
  "type" : "composite",
  "component" : [{
    "definition" : "https://kip.rkkp.dk/fhir/SearchParameter/semver-major",
    "expression" : "version.split('.')[0].toInteger()"
  },
  {
    "definition" : "https://kip.rkkp.dk/fhir/SearchParameter/semver-minor",
    "expression" : "version.split('.')[1].toInteger()"
  },
  {
    "definition" : "https://kip.rkkp.dk/fhir/SearchParameter/semver-patch",
    "expression" : "version.split('.')[2].toInteger()"
  }]
}

```
