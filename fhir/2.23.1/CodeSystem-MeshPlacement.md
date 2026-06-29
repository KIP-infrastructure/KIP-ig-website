# Mesh placement - KIP Infrastructure v2.23.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Mesh placement**

## CodeSystem: Mesh placement 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/MeshPlacement | *Version*:2.23.1 |
| Active as of 2022-07-21 | *Computable Name*:MeshPlacement |

 
Mesh placement 

 This Code system is referenced in the content logical definition of the following value sets: 

* [MeshPlaceringDHDB](ValueSet-MeshPlaceringDHDB.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "MeshPlacement",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/MeshPlacement",
  "version" : "2.23.1",
  "name" : "MeshPlacement",
  "title" : "Mesh placement",
  "status" : "active",
  "date" : "2022-07-21T00:00:00+02:00",
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
  "description" : "Mesh placement",
  "caseSensitive" : false,
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
    "code" : "onlay",
    "display" : "Onlay",
    "definition" : "Onlay"
  },
  {
    "code" : "inlay",
    "display" : "Inlay",
    "definition" : "Inlay"
  },
  {
    "code" : "sublay",
    "display" : "Sublay",
    "definition" : "Sublay"
  },
  {
    "code" : "retromuscular_preperitoneal",
    "display" : "Retromuskulær + præperitoneal",
    "definition" : "Retromuskulær + præperitoneal"
  },
  {
    "code" : "preperitoneal",
    "display" : "Præperitoneal",
    "definition" : "Præperitoneal"
  },
  {
    "code" : "intraperitoneal",
    "display" : "Intraperitoneal",
    "definition" : "Intraperitoneal"
  }]
}

```
