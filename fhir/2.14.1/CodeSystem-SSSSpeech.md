# Scandinavian Stroke Scale (SSS) - Speech - KIP Infrastructure v2.14.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Scandinavian Stroke Scale (SSS) - Speech**

## CodeSystem: Scandinavian Stroke Scale (SSS) - Speech 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/SSSSpeech | *Version*:2.14.1 |
| Active as of 2022-06-23 | *Computable Name*:SSSSpeech |

 
Scandinavian Stroke Scale (SSS) - Speech: Talebesvær på grund af dysartri scorer 10. Kun hvis man er sikker på, at der er sproglige forstyrrelser scores 6, 3 eller 0. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [SSSTale](ValueSet-SSSTale.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "SSSSpeech",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/SSSSpeech",
  "version" : "2.14.1",
  "name" : "SSSSpeech",
  "title" : "Scandinavian Stroke Scale (SSS) - Speech",
  "status" : "active",
  "date" : "2022-06-23T00:00:00+02:00",
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
  "description" : "Scandinavian Stroke Scale (SSS) - Speech: Talebesvær på grund af dysartri scorer 10. Kun hvis man er sikker på, at der er sproglige forstyrrelser scores 6, 3 eller 0.",
  "content" : "complete",
  "count" : 4,
  "concept" : [
    {
      "code" : "10",
      "display" : "10",
      "definition" : "Ingen afasi."
    },
    {
      "code" : "6",
      "display" : "6",
      "definition" : "Begrænset ordforråd, usammenhængende tale."
    },
    {
      "code" : "3",
      "display" : "3",
      "definition" : "Mere end ja og nej, men højst korte sætninger."
    },
    {
      "code" : "0",
      "display" : "0",
      "definition" : "Kun ja og nej eller dårligere."
    }
  ]
}

```
