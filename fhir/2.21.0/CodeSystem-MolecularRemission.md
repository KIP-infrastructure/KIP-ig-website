# Molecular remission (MR) - KIP Infrastructure v2.21.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Molecular remission (MR)**

## CodeSystem: Molecular remission (MR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/MolecularRemission | *Version*:2.21.0 |
| Active as of 2022-07-14 | *Computable Name*:MolecularRemissionCS |

 
Molecular remission (MR) 

 This Code system is referenced in the content logical definition of the following value sets: 

* [MolecularRemission](ValueSet-MolecularRemission.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "MolecularRemission",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/MolecularRemission",
  "version" : "2.21.0",
  "name" : "MolecularRemissionCS",
  "title" : "Molecular remission (MR)",
  "status" : "active",
  "date" : "2022-07-14T00:00:00+02:00",
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
  "description" : "Molecular remission (MR)",
  "caseSensitive" : false,
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
    "code" : "mr_4",
    "display" : "MR4",
    "definition" : "MR4"
  },
  {
    "code" : "mr_4.5",
    "display" : "MR4.5",
    "definition" : "MR4.5"
  },
  {
    "code" : "mr_5",
    "display" : "MR5",
    "definition" : "MR5"
  }]
}

```
