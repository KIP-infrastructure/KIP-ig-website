# Hændelse indtræffer - KIP Infrastructure v2.23.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Hændelse indtræffer**

## CodeSystem: Hændelse indtræffer 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/HaendelseIndtraeffer | *Version*:2.23.0 |
| Active as of 2024-02-13 | *Computable Name*:HaendelseIndtraeffer |

 
I hvilken sammenhæng sker en given hændelse 

 This Code system is referenced in the content logical definition of the following value sets: 

* [UrniLaekDUGA](ValueSet-UrniLaekDUGA.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "HaendelseIndtraeffer",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/HaendelseIndtraeffer",
  "version" : "2.23.0",
  "name" : "HaendelseIndtraeffer",
  "title" : "Hændelse indtræffer",
  "status" : "active",
  "date" : "2024-02-13T00:00:00+02:00",
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
  "description" : "I hvilken sammenhæng sker en given hændelse",
  "content" : "complete",
  "count" : 8,
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
    "code" : "aldrig",
    "display" : "Aldrig",
    "definition" : "Aldrig"
  },
  {
    "code" : "altid",
    "display" : "Hele tiden",
    "definition" : "Hele tiden"
  },
  {
    "code" : "aktiv",
    "display" : "Fysisk aktiv",
    "definition" : "Fysisk aktiv"
  },
  {
    "code" : "efter-toilet",
    "display" : "Efter toilet",
    "definition" : "Efter toilet"
  },
  {
    "code" : "inden-toilet",
    "display" : "Inden toilet",
    "definition" : "Inden toilet"
  },
  {
    "code" : "hoste",
    "display" : "Ved hoste",
    "definition" : "Ved hoste"
  },
  {
    "code" : "sover",
    "display" : "Sover",
    "definition" : "Sover"
  },
  {
    "code" : "uden-grund",
    "display" : "Uden grund",
    "definition" : "Uden grund"
  }]
}

```
