# Radiological bone changes - Indication of changes in bones - KIP Infrastructure v2.14.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Radiological bone changes - Indication of changes in bones**

## CodeSystem: Radiological bone changes - Indication of changes in bones 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/RadiologicalBoneChanges | *Version*:2.14.1 |
| Active as of 2022-06-07 | *Computable Name*:RadiologicalBoneChanges |

 
Radiological bone changes - Indication of changes in bones 

 This Code system is referenced in the content logical definition of the following value sets: 

* [RadiologicalBoneChanges](ValueSet-RadiologicalBoneChanges.md)
* [RadiologicalBoneChanges202412](ValueSet-RadiologicalBoneChanges202412.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "RadiologicalBoneChanges",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/RadiologicalBoneChanges",
  "version" : "2.14.1",
  "name" : "RadiologicalBoneChanges",
  "title" : "Radiological bone changes - Indication of changes in bones",
  "status" : "active",
  "date" : "2022-06-07T00:00:00+02:00",
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
  "description" : "Radiological bone changes - Indication of changes in bones",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 4,
  "concept" : [
    {
      "code" : "none",
      "display" : "Ingen knogleforandringer",
      "definition" : "Ingen knogleforandringer"
    },
    {
      "code" : "diffuse_halisteresis",
      "display" : "Diffus halisterese (som eneste forandring)",
      "definition" : "Diffus halisterese (som eneste forandring)"
    },
    {
      "code" : "few",
      "display" : "Enkelte knogleforandr. i én/enkelte region(er)",
      "definition" : "Enkelte knogleforandr. i én/enkelte region(er)"
    },
    {
      "code" : "multiple",
      "display" : "Multiple knogleforandr. i én/flere regioner",
      "definition" : "Multiple knogleforandr. i én/flere regioner"
    }
  ]
}

```
