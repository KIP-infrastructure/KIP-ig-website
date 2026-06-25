# Bleeding - Stroke - KIP Infrastructure v2.23.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Bleeding - Stroke**

## CodeSystem: Bleeding - Stroke 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/BleedingStroke | *Version*:2.23.0 |
| Active as of 2022-09-01 | *Computable Name*:BleedingStroke |

 
Bleeding - Stroke 

 This Code system is referenced in the content logical definition of the following value sets: 

* [AndenBloedningDAP](ValueSet-AndenBloedningDAP.md)
* [LokalBloedningDAP](ValueSet-LokalBloedningDAP.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "BleedingStroke",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/BleedingStroke",
  "version" : "2.23.0",
  "name" : "BleedingStroke",
  "title" : "Bleeding - Stroke",
  "status" : "active",
  "date" : "2022-09-01T00:00:00+02:00",
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
  "description" : "Bleeding - Stroke",
  "caseSensitive" : false,
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
    "code" : "hi_1",
    "display" : "HI 1",
    "definition" : "HI 1"
  },
  {
    "code" : "hi_2",
    "display" : "HI 2",
    "definition" : "HI 2"
  },
  {
    "code" : "ph_1",
    "display" : "PH 1",
    "definition" : "PH 1"
  },
  {
    "code" : "ph_2",
    "display" : "PH 2",
    "definition" : "PH 2"
  },
  {
    "code" : "phr_1",
    "display" : "PHr 1",
    "definition" : "PHr 1"
  },
  {
    "code" : "phr_2",
    "display" : "PHr 2",
    "definition" : "PHr 2",
    "property" : [{
      "code" : "comment",
      "valueString" : "Added"
    },
    {
      "code" : "effectiveDate",
      "valueDateTime" : "2026-06-24T00:00:00+02:00"
    },
    {
      "code" : "status",
      "valueCode" : "active"
    },
    {
      "code" : "inactive",
      "valueBoolean" : false
    }]
  },
  {
    "code" : "sah",
    "display" : "SAH",
    "definition" : "SAH",
    "property" : [{
      "code" : "comment",
      "valueString" : "Added"
    },
    {
      "code" : "effectiveDate",
      "valueDateTime" : "2026-06-24T00:00:00+02:00"
    },
    {
      "code" : "status",
      "valueCode" : "active"
    },
    {
      "code" : "inactive",
      "valueBoolean" : false
    }]
  },
  {
    "code" : "benhanloeb",
    "display" : "Behandlingskrævende blødning ved indstikssted",
    "definition" : "Behandlingskrævende blødning ved indstikssted",
    "property" : [{
      "code" : "comment",
      "valueString" : "Added"
    },
    {
      "code" : "effectiveDate",
      "valueDateTime" : "2026-06-24T00:00:00+02:00"
    },
    {
      "code" : "status",
      "valueCode" : "active"
    },
    {
      "code" : "inactive",
      "valueBoolean" : false
    }]
  }]
}

```
