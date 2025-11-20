# M component (Myeloma protein) type - KIP Infrastructure v2.14.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **M component (Myeloma protein) type**

## CodeSystem: M component (Myeloma protein) type 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/MComponentType | *Version*:2.14.1 |
| Active as of 2022-06-27 | *Computable Name*:MComponentType |

 
M component (Myeloma protein) type 

 This Code system is referenced in the content logical definition of the following value sets: 

* [MComponentTypeDAMYDA](ValueSet-MComponentTypeDAMYDA.md)
* [MComponentTypeLyfo](ValueSet-MComponentTypeLyfo.md)
* [UMComponentTypeDAMYDA](ValueSet-UMComponentTypeDAMYDA.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "MComponentType",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/MComponentType",
  "version" : "2.14.1",
  "name" : "MComponentType",
  "title" : "M component (Myeloma protein) type",
  "status" : "active",
  "date" : "2022-06-27T00:00:00+02:00",
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
  "description" : "M component (Myeloma protein) type",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 17,
  "concept" : [
    {
      "code" : "iga",
      "display" : "IgA",
      "definition" : "IgA",
      "concept" : [
        {
          "code" : "iga_kappa",
          "display" : "IgA kappa",
          "definition" : "IgA kappa"
        },
        {
          "code" : "iga_lambda",
          "display" : "IgA lambda",
          "definition" : "IgA lambda"
        }
      ]
    },
    {
      "code" : "igg",
      "display" : "IgG",
      "definition" : "IgG",
      "concept" : [
        {
          "code" : "igg_kappa",
          "display" : "IgG kappa",
          "definition" : "IgG kappa"
        },
        {
          "code" : "igg_lambda",
          "display" : "IgG lambda",
          "definition" : "IgG lambda"
        }
      ]
    },
    {
      "code" : "igm",
      "display" : "IgM",
      "definition" : "IgM",
      "concept" : [
        {
          "code" : "igm_kappa",
          "display" : "IgM kappa",
          "definition" : "IgM kappa"
        },
        {
          "code" : "igm_lambda",
          "display" : "IgM lambda",
          "definition" : "IgM lambda"
        }
      ]
    },
    {
      "code" : "igd",
      "display" : "IgD",
      "definition" : "IgD",
      "concept" : [
        {
          "code" : "igd_kappa",
          "display" : "IgD kappa",
          "definition" : "IgD kappa"
        },
        {
          "code" : "igd_lambda",
          "display" : "IgD lambda",
          "definition" : "IgD lambda"
        }
      ]
    },
    {
      "code" : "ige",
      "display" : "IgE",
      "definition" : "IgE",
      "concept" : [
        {
          "code" : "ige_kappa",
          "display" : "IgE kappa",
          "definition" : "IgE kappa"
        },
        {
          "code" : "ige_lambda",
          "display" : "IgE lambda",
          "definition" : "IgE lambda"
        }
      ]
    },
    {
      "code" : "kappa",
      "display" : "Kappa (frie kæder)",
      "definition" : "Kappa (frie kæder)"
    },
    {
      "code" : "lambda",
      "display" : "Lambda (frie kæder)",
      "definition" : "Lambda (frie kæder)"
    }
  ]
}

```
