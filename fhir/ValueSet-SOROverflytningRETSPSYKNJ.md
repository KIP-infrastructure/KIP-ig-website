# SOR: Overflytning Nordjylland (RETSPSYK) - KIP Infrastructure v2.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **SOR: Overflytning Nordjylland (RETSPSYK)**

## ValueSet: SOR: Overflytning Nordjylland (RETSPSYK) (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/SOROverflytningRETSPSYKNJ | *Version*:2.13.0 |
| Active as of 2024-03-13 | *Computable Name*:SOROverflytningRETSPSYKNJ |

 
SOR: Overflytning Nordjylland (RETSPSYK) 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

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
  "id" : "SOROverflytningRETSPSYKNJ",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/SOROverflytningRETSPSYKNJ",
  "version" : "2.13.0",
  "name" : "SOROverflytningRETSPSYKNJ",
  "title" : "SOR: Overflytning Nordjylland (RETSPSYK)",
  "status" : "active",
  "experimental" : true,
  "date" : "2024-03-13T00:00:00+02:00",
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
  "description" : "SOR: Overflytning Nordjylland (RETSPSYK)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SOR",
        "concept" : [
          {
            "code" : "278121000016009",
            "display" : "PS Almenpsykiatrisk Afdeling, Nord"
          },
          {
            "code" : "983051000016003",
            "display" : "Brø Amb Midtv. Brøn. Psykose"
          },
          {
            "code" : "983041000016001",
            "display" : "Brø Amb Midtv. Hjør. Psykose"
          },
          {
            "code" : "698861000016003",
            "display" : "Brø Amb Midtv. Affektiv "
          },
          {
            "code" : "278291000016004",
            "display" : "PS Almenpsykiatrisk Afdeling, Syd"
          },
          {
            "code" : "278321000016007",
            "display" : "PS Almenpsykiatrisk, Syd Ambulatorier  "
          },
          {
            "code" : "278231000016000",
            "display" : "PS Retspsykiatrisk Sengeafsnit"
          },
          {
            "code" : "278221000016002",
            "display" : "PS Retspsykiatrisk Afdeling"
          },
          {
            "code" : "278191000016007",
            "display" : "PS Ældrepsykiatrisk Afdeling"
          },
          {
            "code" : "625211000016002",
            "display" : "Brø Amb Angst og Tvangssygdom "
          },
          {
            "code" : "456481000016000",
            "display" : "Brø Amb Personlighedspsykiatri"
          },
          {
            "code" : "576481000016005",
            "display" : "Brø Amb Psyk Udviklingshæmmede"
          },
          {
            "code" : "1060741000016000",
            "display" : "TM Psyk Amb Thy-Mors Bosted"
          },
          {
            "code" : "1060711000016001",
            "display" : "TM Psyk Amb Thy-Mors Psykose"
          },
          {
            "code" : "495051000016001",
            "display" : "Thy Psyk Amb Thy-Mors"
          },
          {
            "code" : "366121000016007",
            "display" : "Frh Psyk Amb Frederikshavn"
          },
          {
            "code" : "1066921000016005",
            "display" : "Frh Psyk Amb Frederikshavn Psykose"
          },
          {
            "code" : "278131000016006",
            "display" : "PS Almenpsykiatrisk, Nord Sengeafsnit"
          },
          {
            "code" : "278211000016006",
            "display" : "PS Ældrepsykiatrisk Ambulatorier"
          },
          {
            "code" : "278201000016009",
            "display" : "PS Ældrepsykiatrisk Sengeafsnit"
          },
          {
            "code" : "366391000016008",
            "display" : "Alb Amb Angst og Tvangssygdom"
          },
          {
            "code" : "366381000016006",
            "display" : "Alb Amb Personlighedsforstyrrelser"
          },
          {
            "code" : "983011000016002",
            "display" : "Alb Amb Psykose Aalborg Centrum "
          },
          {
            "code" : "983021000016006",
            "display" : "Alb Amb Psykose Aalborg SydØst"
          },
          {
            "code" : "983031000016008",
            "display" : "Alb Amb Psykose Himmerland"
          },
          {
            "code" : "366411000016008",
            "display" : "Alb Amb Psykose specialafsnit"
          },
          {
            "code" : "438091000016005",
            "display" : "Alb Amb Unge med Skizofreni"
          },
          {
            "code" : "508591000016003",
            "display" : "Alb Amb for ADHD Voksne"
          },
          {
            "code" : "685871000016000",
            "display" : "Alb Amb for Bipolar Lidelse"
          },
          {
            "code" : "366431000016002",
            "display" : "Alb Amb for Depression"
          },
          {
            "code" : "983001000016004",
            "display" : "Alm Amb Psykose Aalborg Nord"
          },
          {
            "code" : "278301000016000",
            "display" : "PS Almenpsykiatrisk, Syd Sengeafsnit"
          }
        ]
      }
    ]
  }
}

```
