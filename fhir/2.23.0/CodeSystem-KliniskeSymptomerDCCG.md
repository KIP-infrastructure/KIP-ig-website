# Kliniske symptomer (DCCG) - KIP Infrastructure v2.23.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Kliniske symptomer (DCCG)**

## CodeSystem: Kliniske symptomer (DCCG) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/KliniskeSymptomerDCCG | *Version*:2.23.0 |
| Active as of 2022-11-09 | *Computable Name*:KliniskeSymptomerDCCGCS |

 
Kliniske symptomer (DCCG) 

 This Code system is referenced in the content logical definition of the following value sets: 

* [KliniskeSymptomerDCCG](ValueSet-KliniskeSymptomerDCCG.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "KliniskeSymptomerDCCG",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/KliniskeSymptomerDCCG",
  "version" : "2.23.0",
  "name" : "KliniskeSymptomerDCCGCS",
  "title" : "Kliniske symptomer (DCCG)",
  "status" : "active",
  "date" : "2022-11-09T00:00:00+02:00",
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
  "description" : "Kliniske symptomer (DCCG)",
  "content" : "complete",
  "count" : 6,
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
    "code" : "ileus",
    "display" : "Ileus",
    "definition" : "Ileus"
  },
  {
    "code" : "spontan_perf",
    "display" : "Spontan perforation",
    "definition" : "Spontan perforation"
  },
  {
    "code" : "bloedning",
    "display" : "Blødning",
    "definition" : "Blødning"
  },
  {
    "code" : "endoscopi_foelge",
    "display" : "Følge efter endoskopi",
    "definition" : "Følge efter endoskopi"
  },
  {
    "code" : "endoscopi_lokalresek_foelge",
    "display" : "Følge efter endoskopisk lokalresektion",
    "definition" : "Følge efter endoskopisk lokalresektion"
  },
  {
    "code" : "stent_foelge",
    "display" : "Følge af stentanlæggelse",
    "definition" : "Følge af stentanlæggelse"
  }]
}

```
