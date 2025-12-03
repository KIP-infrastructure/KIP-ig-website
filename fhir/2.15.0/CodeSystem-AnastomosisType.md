# Anastomosis type - KIP Infrastructure v2.15.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Anastomosis type**

## CodeSystem: Anastomosis type 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/AnastomosisType | *Version*:2.15.0 |
| Active as of 2022-08-22 | *Computable Name*:AnastomosisType |

 
Anastomosis type 

 This Code system is referenced in the content logical definition of the following value sets: 

* [AnastomoseType1](ValueSet-AnastomoseType1.md)
* [AnastomoseType2](ValueSet-AnastomoseType2.md)
* [AnastomoseType3](ValueSet-AnastomoseType3.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "AnastomosisType",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/AnastomosisType",
  "version" : "2.15.0",
  "name" : "AnastomosisType",
  "title" : "Anastomosis type",
  "status" : "active",
  "date" : "2022-08-22T00:00:00+02:00",
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
  "description" : "Anastomosis type",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 10,
  "concept" : [
    {
      "code" : "hand_sewn",
      "display" : "Hand sewn",
      "definition" : "Hand sewn / Håndsyet"
    },
    {
      "code" : "stapled",
      "display" : "Stapled",
      "definition" : "Stapled / Staplet"
    },
    {
      "code" : "intracorporeal",
      "display" : "Intracorporeal",
      "definition" : "Intracorporeal / Intrakorporalt"
    },
    {
      "code" : "extracorporeal",
      "display" : "Extracorporeal",
      "definition" : "extracorporeal / Ekstrakorporalt"
    },
    {
      "code" : "end_to_end",
      "display" : "End-to-end",
      "definition" : "End-to-end"
    },
    {
      "code" : "side_to_end",
      "display" : "Side-to-end",
      "definition" : "Side-to-end"
    },
    {
      "code" : "end_to_side",
      "display" : "End-to-side",
      "definition" : "End-to-side"
    },
    {
      "code" : "side_to_side",
      "display" : "Side-to-side",
      "definition" : "Side-to-side"
    },
    {
      "code" : "functional_end_to_end",
      "display" : "Functional end-to-end",
      "definition" : "Functional end-to-end / Funktionelt end-to-end"
    },
    {
      "code" : "pouch",
      "display" : "Pouch",
      "definition" : "Pouch"
    }
  ]
}

```
