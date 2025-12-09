# Aneurysm size scale (SAH) - KIP Infrastructure v2.17.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Aneurysm size scale (SAH)**

## CodeSystem: Aneurysm size scale (SAH) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/AneurysmSizeScale | *Version*:2.17.1 |
| Active as of 2022-06-14 | *Computable Name*:AneurysmSizeScale |

 
Aneurysm size scale (SAH) 

 This Code system is referenced in the content logical definition of the following value sets: 

* [AnurismeStoerrelseSAH](ValueSet-AnurismeStoerrelseSAH.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "AneurysmSizeScale",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/AneurysmSizeScale",
  "version" : "2.17.1",
  "name" : "AneurysmSizeScale",
  "title" : "Aneurysm size scale (SAH)",
  "status" : "active",
  "date" : "2022-06-14T00:00:00+02:00",
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
  "description" : "Aneurysm size scale (SAH)",
  "content" : "fragment",
  "count" : 4,
  "concept" : [
    {
      "code" : "gt25",
      "display" : ">25 mm",
      "definition" : ">25 mm"
    },
    {
      "code" : "ge12le25",
      "display" : ">=12 mm, =<25 mm",
      "definition" : ">=12 mm, =<25 mm"
    },
    {
      "code" : "ge7lt12",
      "display" : ">=7 mm, <12 mm",
      "definition" : ">=7 mm, <12 mm"
    },
    {
      "code" : "lt7",
      "display" : "<7 mm",
      "definition" : "<7 mm"
    }
  ]
}

```
