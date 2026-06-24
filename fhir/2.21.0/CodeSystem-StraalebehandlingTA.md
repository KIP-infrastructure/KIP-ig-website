# Strålebehandling mål - KIP Infrastructure v2.21.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Strålebehandling mål**

## CodeSystem: Strålebehandling mål 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/StraalebehandlingTA | *Version*:2.21.0 |
| Active as of 2022-05-17 | *Computable Name*:StraalebehandlingTA |

 
Mål for strålebehandling 

 This Code system is referenced in the content logical definition of the following value sets: 

* [StraalebehandlingTAAll](ValueSet-StraalebehandlingTAAll.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "StraalebehandlingTA",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/StraalebehandlingTA",
  "version" : "2.21.0",
  "name" : "StraalebehandlingTA",
  "title" : "Strålebehandling mål",
  "status" : "active",
  "date" : "2022-05-17T00:00:00+02:00",
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
  "description" : "Mål for strålebehandling",
  "content" : "complete",
  "count" : 4,
  "property" : [{
    "code" : "comment",
    "uri" : "http://hl7.org/fhir/concept-properties#comment",
    "description" : "A string that provides additional detail pertinent to the use or understanding of the concept",
    "type" : "string"
  },
  {
    "code" : "effectiveDate",
    "uri" : "http://hl7.org/fhir/concept-properties#effectiveDate",
    "description" : "The date at which the concept status was last changed",
    "type" : "dateTime"
  },
  {
    "code" : "status",
    "uri" : "http://hl7.org/fhir/concept-properties#status",
    "description" : "A code that indicates the status of the concept. Typical values are active, experimental, deprecated, and retired",
    "type" : "code"
  },
  {
    "code" : "inactive",
    "uri" : "http://hl7.org/fhir/concept-properties#inactive",
    "description" : "True if the concept is not considered active - e.g. not a valid concept any more. Property type is boolean, default value is false. Note that the status property may also be used to indicate that a concept is inactive",
    "type" : "boolean"
  }],
  "concept" : [{
    "code" : "priTum",
    "display" : "Primær tumor",
    "definition" : "Hvis den primære tumor var målet"
  },
  {
    "code" : "kngTast",
    "display" : "Knoglemetastase",
    "definition" : "Hvis knoglemetastase var målet"
  },
  {
    "code" : "cns",
    "display" : "CNS",
    "definition" : "Hvis CNS var målet"
  },
  {
    "code" : "anden",
    "display" : "Anden/Ikke specificeret",
    "definition" : "Hvis andet eller ikke specificeret mål blev valgt"
  }]
}

```
