# Blodsygdomme - KIP Infrastructure v2.16.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Blodsygdomme**

## ValueSet: Blodsygdomme (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/HematologicalDiseases | *Version*:2.16.0 |
| Active as of 2022-07-08 | *Computable Name*:HematologicalDiseases |

 
Blodsygdomme 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

This value set contains 6 concepts

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "HematologicalDiseases",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/HematologicalDiseases",
  "version" : "2.16.0",
  "name" : "HematologicalDiseases",
  "title" : "Blodsygdomme",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-07-08T00:00:00+02:00",
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
  "description" : "Blodsygdomme",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/DiseasesUnspecified",
        "concept" : [
          {
            "code" : "myelodysplastic_syndrome",
            "display" : "1: Myelodyspl. syndrom (undt. CMML)"
          },
          {
            "code" : "chronic_myelomonocytic_leukemia",
            "display" : "2: CMML (Kronisk MyeloMonocytLeuk.)"
          },
          {
            "code" : "essential_thrombocytosis",
            "display" : "3: Ess. thrombocytose"
          },
          {
            "code" : "polycythemia_vera",
            "display" : "4: Polycytæmia vera"
          },
          {
            "code" : "myelofibrosis",
            "display" : "5: Myelofibrose"
          }
        ]
      },
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
        "concept" : [
          {
            "code" : "other",
            "display" : "6: Andet"
          }
        ]
      }
    ]
  }
}

```
