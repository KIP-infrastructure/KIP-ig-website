# Patobank SNOMED DMPN Diagnose - KIP Infrastructure v2.14.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Patobank SNOMED DMPN Diagnose**

## ValueSet: Patobank SNOMED DMPN Diagnose (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/PatobankSNOMEDDMPNDiagnose | *Version*:2.14.1 |
| Active as of 2022-07-14 | *Computable Name*:PatobankSNOMEDDMPNDiagnose |

 
DMPN diagnoser (Patobank SNOMED) 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

This value set contains 7 concepts

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
  "id" : "PatobankSNOMEDDMPNDiagnose",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/PatobankSNOMEDDMPNDiagnose",
  "version" : "2.14.1",
  "name" : "PatobankSNOMEDDMPNDiagnose",
  "title" : "Patobank SNOMED DMPN Diagnose",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-07-14T00:00:00+02:00",
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
  "description" : "DMPN diagnoser (Patobank SNOMED)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/PatobankSNOMED",
        "concept" : [
          {
            "code" : "M98753",
            "display" : "Kronisk myeloid leukæmi, BCR-ABL1 positiv (CML)"
          },
          {
            "code" : "M99453",
            "display" : "Kronisk myelomonocytær leukæmi (CMML)"
          },
          {
            "code" : "M99503",
            "display" : "Polycytæmia vera"
          },
          {
            "code" : "M99613",
            "display" : "Primær Myelofibrose"
          },
          {
            "code" : "M99623",
            "display" : "Essentiel trombocytæmi"
          },
          {
            "code" : "M99753",
            "display" : "Uklassificerbar myelodysplastisk/myeloproliferativ sygdom"
          }
        ]
      },
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/DiseasesUnspecified",
        "concept" : [
          {
            "code" : "prefibrotic",
            "display" : "Præfibrotisk Myelofibrose"
          }
        ]
      }
    ]
  }
}

```
