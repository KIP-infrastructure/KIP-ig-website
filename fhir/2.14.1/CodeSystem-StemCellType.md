# Stem cell type - KIP Infrastructure v2.14.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Stem cell type**

## CodeSystem: Stem cell type 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/StemCellType | *Version*:2.14.1 |
| Active as of 2022-06-07 | *Computable Name*:StemCellType |

 
Stem cell type 

 This Code system is referenced in the content logical definition of the following value sets: 

* [CytogeneticStemCellType](ValueSet-CytogeneticStemCellType.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "StemCellType",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/StemCellType",
  "version" : "2.14.1",
  "name" : "StemCellType",
  "title" : "Stem cell type",
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
  "description" : "Stem cell type",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 2,
  "concept" : [
    {
      "code" : "bone_marrow",
      "display" : "Bone marrow stromal stem cell",
      "definition" : "Bone marrow stromal stem cell / SNOMED-CT: 418460001"
    },
    {
      "code" : "peripheral_blood",
      "display" : "Peripheral blood stem cell",
      "definition" : "Peripheral blood stem cell / SNOMED-CT: 419583006"
    }
  ]
}

```
