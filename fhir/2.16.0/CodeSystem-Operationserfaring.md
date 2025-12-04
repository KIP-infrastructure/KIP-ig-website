# Operationserfaring - KIP Infrastructure v2.16.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Operationserfaring**

## CodeSystem: Operationserfaring 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/Operationserfaring | *Version*:2.16.0 |
| Active as of 2024-02-15 | *Computable Name*:Operationserfaring |

 
Operationserfaring for operatører og assistenter 

 This Code system is referenced in the content logical definition of the following value sets: 

* [Operationserfaring](ValueSet-Operationserfaring.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "Operationserfaring",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/Operationserfaring",
  "version" : "2.16.0",
  "name" : "Operationserfaring",
  "title" : "Operationserfaring",
  "status" : "active",
  "date" : "2024-02-15T00:00:00+02:00",
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
  "description" : "Operationserfaring for operatører og assistenter",
  "content" : "complete",
  "count" : 6,
  "concept" : [
    {
      "code" : "1",
      "display" : "(0-10)",
      "definition" : "0-10 operationer"
    },
    {
      "code" : "2",
      "display" : "(11-25)",
      "definition" : "11-25 operationer"
    },
    {
      "code" : "3",
      "display" : "(26-50)",
      "definition" : "26-50 operationer"
    },
    {
      "code" : "4",
      "display" : "(51-75)",
      "definition" : "51-75 operationer"
    },
    {
      "code" : "5",
      "display" : "(76-100)",
      "definition" : "76-100 operationer"
    },
    {
      "code" : "6",
      "display" : "(>100)",
      "definition" : "Mere end 100 operationer"
    }
  ]
}

```
