# Aktuel Sygdomsforløb - KIP Infrastructure v2.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Aktuel Sygdomsforløb**

## CodeSystem: Aktuel Sygdomsforløb 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/AktuelSygdomsforlob | *Version*:2.13.0 |
| Active as of 2022-06-22 | *Computable Name*:AktuelSygdomsforlob |

 
Er patienten i det aktuelle sygdomsforløb 

 This Code system is referenced in the content logical definition of the following value sets: 

* [AktuelSygdomsforlob](ValueSet-AktuelSygdomsforlob.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "AktuelSygdomsforlob",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/AktuelSygdomsforlob",
  "version" : "2.13.0",
  "name" : "AktuelSygdomsforlob",
  "title" : "Aktuel Sygdomsforløb",
  "status" : "active",
  "date" : "2022-06-22T00:00:00+02:00",
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
  "description" : "Er patienten i det aktuelle sygdomsforløb",
  "content" : "complete",
  "count" : 2,
  "concept" : [
    {
      "code" : "indlagt",
      "display" : "Indlagt",
      "definition" : "Patienten er indlagt (stationær)"
    },
    {
      "code" : "ambulant",
      "display" : "Ambulant",
      "definition" : "Patienten er ambulant"
    }
  ]
}

```
