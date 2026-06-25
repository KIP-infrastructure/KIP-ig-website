# Mesh technique - KIP Infrastructure v2.23.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Mesh technique**

## CodeSystem: Mesh technique 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/MeshTechnique | *Version*:2.23.0 |
| Active as of 2022-07-21 | *Computable Name*:MeshTechnique |

 
Mesh technique 

 This Code system is referenced in the content logical definition of the following value sets: 

* [MeshTeknikDHDB](ValueSet-MeshTeknikDHDB.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "MeshTechnique",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/MeshTechnique",
  "version" : "2.23.0",
  "name" : "MeshTechnique",
  "title" : "Mesh technique",
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
  "description" : "Mesh technique",
  "caseSensitive" : false,
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
    "code" : "keyhole",
    "display" : "Keyhole technique",
    "definition" : "Keyhole technique / Keyhole teknik"
  },
  {
    "code" : "sugarbaker",
    "display" : "Sugarbaker technique",
    "definition" : "Sugarbaker technique / Sugarbaker teknik"
  },
  {
    "code" : "combined",
    "display" : "Combined Keyhole and Sugerbaker technique",
    "definition" : "Combined Keyhole and Sugerbaker technique / Kombineret Keyhole og Sugarbaker teknik"
  },
  {
    "code" : "preperitoneal",
    "display" : "Preperitoneal technique",
    "definition" : "Preperitoneal technique / Præperitoneal teknik"
  },
  {
    "code" : "retromuscular",
    "display" : "Retromuscular mesh repair technique (Pauli)",
    "definition" : "Retromuscular technique / Retromuskulær teknik"
  }]
}

```
