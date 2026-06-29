# Databaser - KIP - KIP Infrastructure v2.23.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Databaser - KIP**

## CodeSystem: Databaser - KIP 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/DatabasesKIP | *Version*:2.23.1 |
| Active as of 2023-03-15 | *Computable Name*:DatabasesKIP |

 
Databaser i KIP 

 This Code system is referenced in the content logical definition of the following value sets: 

* [DatabasesHAEMA](ValueSet-DatabasesHAEMA.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "DatabasesKIP",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/DatabasesKIP",
  "version" : "2.23.1",
  "name" : "DatabasesKIP",
  "title" : "Databaser - KIP",
  "status" : "active",
  "date" : "2023-03-15T00:00:00+02:00",
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
  "description" : "Databaser i KIP",
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
    "code" : "ALD",
    "display" : "ALD",
    "definition" : "HÆMA - ALD"
  },
  {
    "code" : "DAMYDA",
    "display" : "DAMYDA",
    "definition" : "HÆMA - DAMYDA"
  },
  {
    "code" : "MDS",
    "display" : "MDS",
    "definition" : "HÆMA - MDS"
  }]
}

```
