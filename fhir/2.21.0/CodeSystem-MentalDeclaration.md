# Mental declaration - KIP Infrastructure v2.21.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Mental declaration**

## CodeSystem: Mental declaration 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/MentalDeclaration | *Version*:2.21.0 |
| Active as of 2022-07-12 | *Computable Name*:MentalDeclaration |

 
Mental declaration 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ErklaeringRETSPSYK](ValueSet-ErklaeringRETSPSYK.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "MentalDeclaration",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/MentalDeclaration",
  "version" : "2.21.0",
  "name" : "MentalDeclaration",
  "title" : "Mental declaration",
  "status" : "active",
  "date" : "2022-07-12T00:00:00+02:00",
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
  "description" : "Mental declaration",
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
    "code" : "new_mental_examination",
    "display" : "Ny mentalundersøgelse er foretaget i forbindelse med aktuelle dom",
    "definition" : "Ny mentalundersøgelse er foretaget i forbindelse med aktuelle dom"
  },
  {
    "code" : "previous_mental_examination",
    "display" : "Der foreligger mentalundersøgelse fra tidligere, der anvendes i aktuel sag",
    "definition" : "Der foreligger mentalundersøgelse fra tidligere, der anvendes i aktuel sag"
  },
  {
    "code" : "statement",
    "display" : "Udtalelse givet efter igangværende undersøgelse af behandlingsansvarlig i henhold til dom",
    "definition" : "Udtalelse givet efter igangværende undersøgelse af behandlingsansvarlig i henhold til dom"
  }]
}

```
