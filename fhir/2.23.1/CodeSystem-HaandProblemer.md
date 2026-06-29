# Taget hånd om problemer - KIP Infrastructure v2.23.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Taget hånd om problemer**

## CodeSystem: Taget hånd om problemer 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/HaandProblemer | *Version*:2.23.1 |
| Active as of 2026-06-24 | *Computable Name*:HaandProblemerCS |

 
Taget hånd om problemer, PRO-PAL-skema 1 

 This Code system is referenced in the content logical definition of the following value sets: 

* [HaandProblemerVS](ValueSet-HandProblemer.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "HaandProblemer",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/HaandProblemer",
  "version" : "2.23.1",
  "name" : "HaandProblemerCS",
  "title" : "Taget hånd om problemer",
  "status" : "active",
  "date" : "2026-06-24T00:00:00+02:00",
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
  "description" : "Taget hånd om problemer, PRO-PAL-skema 1",
  "content" : "complete",
  "count" : 5,
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
    "code" : "ingenProblemer",
    "display" : "Der er taget hånd om problemerne / Ingen problemer",
    "definition" : "Der er taget hånd om problemerne / Ingen problemer",
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
    "code" : "haandProblemer",
    "display" : "Der er for det meste taget hånd om problemerne",
    "definition" : "Der er for det meste taget hånd om problemerne",
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
    "code" : "delvistProblemer",
    "display" : "Der er delvist taget hånd om problemerne",
    "definition" : "Der er delvist taget hånd om problemerne",
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
    "code" : "stortHaandProblemer",
    "display" : "Der er stort set ikke taget hånd om problemerne",
    "definition" : "Der er stort set ikke taget hånd om problemerne",
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
    "code" : "ikkeHaandProblemer",
    "display" : "Der er ikke taget hånd om problemerne",
    "definition" : "Der er ikke taget hånd om problemerne",
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
