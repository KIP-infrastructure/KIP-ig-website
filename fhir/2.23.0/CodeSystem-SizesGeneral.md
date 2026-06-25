# General size scale - KIP Infrastructure v2.23.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **General size scale**

## CodeSystem: General size scale 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/SizesGeneral | *Version*:2.23.0 |
| Active as of 2023-05-23 | *Computable Name*:SizesGeneral |

 
General size scale 

 This Code system is referenced in the content logical definition of the following value sets: 

* [CaputDiameterDHR](ValueSet-CaputDiameterDHR.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "SizesGeneral",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/SizesGeneral",
  "version" : "2.23.0",
  "name" : "SizesGeneral",
  "title" : "General size scale",
  "status" : "active",
  "date" : "2023-05-23T00:00:00+02:00",
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
  "description" : "General size scale",
  "content" : "fragment",
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
    "code" : "28",
    "display" : "28",
    "definition" : "28"
  },
  {
    "code" : "32",
    "display" : "32",
    "definition" : "32"
  },
  {
    "code" : "36",
    "display" : "36",
    "definition" : "36"
  },
  {
    "code" : "40",
    "display" : "40",
    "definition" : "40"
  },
  {
    "code" : "44",
    "display" : "44",
    "definition" : "44"
  }]
}

```
