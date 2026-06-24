# Operationserfaring - KIP Infrastructure v2.21.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Operationserfaring**

## CodeSystem: Operationserfaring 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/Operationserfaring | *Version*:2.21.0 |
| Active as of 2024-02-15 | *Computable Name*:OperationserfaringCS |

 
Operationserfaring for operatører og assistenter 

 This Code system is referenced in the content logical definition of the following value sets: 

* [Operationserfaring](ValueSet-Operationserfaring.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "Operationserfaring",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/Operationserfaring",
  "version" : "2.21.0",
  "name" : "OperationserfaringCS",
  "title" : "Operationserfaring",
  "status" : "active",
  "date" : "2024-02-15T00:00:00+02:00",
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
  "description" : "Operationserfaring for operatører og assistenter",
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
    "code" : "le10",
    "display" : "(0-10)",
    "definition" : "0-10 operationer"
  },
  {
    "code" : "11-25",
    "display" : "(11-25)",
    "definition" : "11-25 operationer"
  },
  {
    "code" : "26-50",
    "display" : "(26-50)",
    "definition" : "26-50 operationer"
  },
  {
    "code" : "51-75",
    "display" : "(51-75)",
    "definition" : "51-75 operationer"
  },
  {
    "code" : "76-100",
    "display" : "(76-100)",
    "definition" : "76-100 operationer"
  },
  {
    "code" : "gt100",
    "display" : "(>100)",
    "definition" : "Mere end 100 operationer"
  }]
}

```
