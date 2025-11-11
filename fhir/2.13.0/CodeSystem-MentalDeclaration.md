# Mental declaration - KIP Infrastructure v2.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Mental declaration**

## CodeSystem: Mental declaration 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/MentalDeclaration | *Version*:2.13.0 |
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
  "version" : "2.13.0",
  "name" : "MentalDeclaration",
  "title" : "Mental declaration",
  "status" : "active",
  "date" : "2022-07-12T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [
    {
      "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://trifork.com"
        },
        {
          "system" : "email",
          "value" : "rbk@trifork.com"
        }
      ]
    }
  ],
  "description" : "Mental declaration",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 3,
  "concept" : [
    {
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
    }
  ]
}

```
