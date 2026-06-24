# Lokalization esophagus cancer - KIP Infrastructure v2.21.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Lokalization esophagus cancer**

## CodeSystem: Lokalization esophagus cancer 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/EsophagealLokalization | *Version*:2.21.0 |
| Active as of 2022-06-07 | *Computable Name*:EsophagealLokalization |

 
Lokalization esophagus cancer 

 This Code system is referenced in the content logical definition of the following value sets: 

* [LokalisationEsophagusDEGC](ValueSet-LokalisationEsophagusDEGC.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "EsophagealLokalization",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/EsophagealLokalization",
  "version" : "2.21.0",
  "name" : "EsophagealLokalization",
  "title" : "Lokalization esophagus cancer",
  "status" : "active",
  "date" : "2022-06-07T00:00:00+02:00",
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
  "description" : "Lokalization esophagus cancer",
  "content" : "complete",
  "count" : 3,
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
    "code" : "upper",
    "display" : "Øverste tredjedel",
    "definition" : "Øverste tredjedel"
  },
  {
    "code" : "middle",
    "display" : "Midterste tredjedel",
    "definition" : "Midterste tredjedel"
  },
  {
    "code" : "lower",
    "display" : "Nederste tredjedel",
    "definition" : "Nederste tredjedel"
  }]
}

```
