# Mængde - KIP Infrastructure v2.15.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Mængde**

## CodeSystem: Mængde 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/Maengde | *Version*:2.15.0 |
| Active as of 2024-02-13 | *Computable Name*:Maengde |

 
Angivelse af mængder 

 This Code system is referenced in the content logical definition of the following value sets: 

* [Maengder](ValueSet-Maengder.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "Maengde",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/Maengde",
  "version" : "2.15.0",
  "name" : "Maengde",
  "title" : "Mængde",
  "status" : "active",
  "date" : "2024-02-13T00:00:00+02:00",
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
  "description" : "Angivelse af mængder",
  "content" : "complete",
  "count" : 4,
  "concept" : [
    {
      "code" : "0",
      "display" : "Ingen",
      "definition" : "Ingen"
    },
    {
      "code" : "2",
      "display" : "Lille",
      "definition" : "Lille mængde"
    },
    {
      "code" : "4",
      "display" : "Moderat",
      "definition" : "Moderat mængde"
    },
    {
      "code" : "6",
      "display" : "Stor",
      "definition" : "Stor mængde"
    }
  ]
}

```
