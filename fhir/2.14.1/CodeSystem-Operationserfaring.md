# Operationserfaring - KIP Infrastructure v2.14.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Operationserfaring**

## CodeSystem: Operationserfaring 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/Operationserfaring | *Version*:2.14.1 |
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
  "version" : "2.14.1",
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
      "code" : "le10",
      "display" : "(0-10)",
      "definition" : "0-10 operationer"
    },
    {
      "code" : "11-25",
      "display" : "(11-25)",
      "definition" : "11-25 operationer"
    },
    {
      "code" : "26-50",
      "display" : "(26-50)",
      "definition" : "26-50 operationer"
    },
    {
      "code" : "51-75",
      "display" : "(51-75)",
      "definition" : "51-75 operationer"
    },
    {
      "code" : "76-100",
      "display" : "(76-100)",
      "definition" : "76-100 operationer"
    },
    {
      "code" : "gt100",
      "display" : "(>100)",
      "definition" : "Mere end 100 operationer"
    }
  ]
}

```
