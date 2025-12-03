# Genoplivning - KIP Infrastructure v2.15.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Genoplivning**

## CodeSystem: Genoplivning 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/Genoplivning | *Version*:2.15.0 |
| Active as of 2022-06-29 | *Computable Name*:Genoplivning |

 
Aktivitet ifm genoplivning 

 This Code system is referenced in the content logical definition of the following value sets: 

* [Genoplivning](ValueSet-Genoplivning.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "Genoplivning",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/Genoplivning",
  "version" : "2.15.0",
  "name" : "Genoplivning",
  "title" : "Genoplivning",
  "status" : "active",
  "date" : "2022-06-29T00:00:00+02:00",
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
  "description" : "Aktivitet ifm genoplivning",
  "content" : "complete",
  "count" : 4,
  "concept" : [
    {
      "code" : "hjertemass",
      "display" : "Hjertemassage",
      "definition" : "Hjertemassage alene"
    },
    {
      "code" : "ventilation",
      "display" : "Ventilation",
      "definition" : "Ventilation alene"
    },
    {
      "code" : "hjmass_vent",
      "display" : "Hjertemassage og ventilation",
      "definition" : "Hjertemassage og ventilation"
    },
    {
      "code" : "ingen",
      "display" : "Ingen",
      "definition" : "Ingen"
    }
  ]
}

```
