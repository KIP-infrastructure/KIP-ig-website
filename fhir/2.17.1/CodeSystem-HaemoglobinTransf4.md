# HGBTransfusion4 - KIP Infrastructure v2.17.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **HGBTransfusion4**

## CodeSystem: HGBTransfusion4 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/HaemoglobinTransf4 | *Version*:2.17.1 |
| Active as of 2022-06-13 | *Computable Name*:HaemoglobinTransf4 |

 
Hæmoglobinværdi før blodtransfusion 

 This Code system is referenced in the content logical definition of the following value sets: 

* [HaemoglobinTransf4](ValueSet-HaemoglobinTransf4.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "HaemoglobinTransf4",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/HaemoglobinTransf4",
  "version" : "2.17.1",
  "name" : "HaemoglobinTransf4",
  "title" : "HGBTransfusion4",
  "status" : "active",
  "date" : "2022-06-13T00:00:00+02:00",
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
  "description" : "Hæmoglobinværdi før blodtransfusion",
  "content" : "complete",
  "count" : 4,
  "concept" : [
    {
      "code" : "hgb_trfGE56",
      "display" : "=>5,6 mmol/L",
      "definition" : "=>5,6 mmol/L"
    },
    {
      "code" : "hgb_trfGE43",
      "display" : "=>4,3 mmol/L og <5,6 mmol/L",
      "definition" : "=>4,3 mmol/L og <5,6 mmol/L"
    },
    {
      "code" : "hgb_trfLT43",
      "display" : "<4,3 mmol/L",
      "definition" : "<4,3 mmol/L"
    },
    {
      "code" : "hgb_novalue",
      "display" : "Ikke målt",
      "definition" : "Ikke målt"
    }
  ]
}

```
