# Operating room, attributes - KIP Infrastructure v2.23.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Operating room, attributes**

## CodeSystem: Operating room, attributes 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/OperatingRoom | *Version*:2.23.1 |
| Active as of 2022-07-06 | *Computable Name*:OperatingRoom |

 
Operating room, attributes 

 This Code system is referenced in the content logical definition of the following value sets: 

* [OperationsstueDKR](ValueSet-OperationsstueDKR.md)
* [OperationsstueFlowKonventionel](ValueSet-OperationsstueFlowKonventionel.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "OperatingRoom",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/OperatingRoom",
  "version" : "2.23.1",
  "name" : "OperatingRoom",
  "title" : "Operating room, attributes",
  "status" : "active",
  "date" : "2022-07-06T00:00:00+02:00",
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
  "description" : "Operating room, attributes",
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
    "code" : "flow",
    "display" : "Flow stue/green house",
    "definition" : "Flow stue/green house"
  },
  {
    "code" : "conventional",
    "display" : "Konventionel stue",
    "definition" : "Konventionel stue"
  },
  {
    "code" : "turbulent_air",
    "display" : "Turbulent Air Flow",
    "definition" : "Turbulent Air stue"
  }]
}

```
