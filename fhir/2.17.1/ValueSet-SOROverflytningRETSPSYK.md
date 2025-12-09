# SOR: Overflytning (RETSPSYK) - KIP Infrastructure v2.17.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **SOR: Overflytning (RETSPSYK)**

## ValueSet: SOR: Overflytning (RETSPSYK) (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/SOROverflytningRETSPSYK | *Version*:2.17.1 |
| Active as of 2022-11-01 | *Computable Name*:SOROverflytningRETSPSYK |

 
SOR: Overflytning (RETSPSYK) 

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
  "id" : "SOROverflytningRETSPSYK",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/SOROverflytningRETSPSYK",
  "version" : "2.17.1",
  "name" : "SOROverflytningRETSPSYK",
  "title" : "SOR: Overflytning (RETSPSYK)",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-11-01T00:00:00+02:00",
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
  "description" : "SOR: Overflytning (RETSPSYK)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SOR",
        "concept" : [
          {
            "code" : "1200011000016005",
            "display" : "ADA Klinik for Bipolar Sygdom - AUH"
          },
          {
            "code" : "237021000016009",
            "display" : "Afdeling For Retspsykiatri - Ledelse"
          },
          {
            "code" : "237041000016004",
            "display" : "PSL Retspsykiatrisk Afd."
          },
          {
            "code" : "243921000016002",
            "display" : "PSY Retspsykiatrisk afdeling (Middelfart)"
          },
          {
            "code" : "243951000016005",
            "display" : "PSY Retspsykiatrisk Ambulatorium (Middelfart)"
          },
          {
            "code" : "261341000016001",
            "display" : "Psyk. Center Amager, overafd."
          },
          {
            "code" : "261431000016003",
            "display" : "Børne- og Ungdomspsykiatrisk overafdeling, Bispebjerg, B1"
          },
          {
            "code" : "261501000016006",
            "display" : "Psyk. Center København, overafd. N,  Nørrebro-afdelingen"
          },
          {
            "code" : "262181000016004",
            "display" : "Psyk. Center Sct. Hans, Retspsyk. overafd. R"
          },
          {
            "code" : "262221000016007",
            "display" : "Psyk. Center Sct. Hans, overafd. M"
          },
          {
            "code" : "262391000016004",
            "display" : "Psyk. Center Ballerup, overafd. Ballerup"
          },
          {
            "code" : "262511000016000",
            "display" : "Psyk. Center Nordsjælland, overafd."
          },
          {
            "code" : "262671000016009",
            "display" : "Psyk. Center Glostrup, overafd."
          },
          {
            "code" : "262681000016006",
            "display" : "PCGL, Psyk. sengeafd."
          },
          {
            "code" : "278121000016009",
            "display" : "PS Klinik Nord"
          },
          {
            "code" : "278221000016002",
            "display" : "PS Retspsykiatri"
          },
          {
            "code" : "278231000016000",
            "display" : "PS Klinik Syd Retspsykiatri"
          },
          {
            "code" : "278291000016004",
            "display" : "PS Klinik Syd"
          },
          {
            "code" : "278321000016007",
            "display" : "PS Klinik Syd Ambulatorier"
          },
          {
            "code" : "282651000016004",
            "display" : "Psyk. Center Bornholm"
          },
          {
            "code" : "339031000016008",
            "display" : "Børne- og Ungdomspsyk. Center Bispebjerg, B"
          },
          {
            "code" : "387101000016000",
            "display" : "PVE Ambulant psykose enhed - vest"
          },
          {
            "code" : "391151000016008",
            "display" : "PMI Regionspsykiatrien Midt"
          },
          {
            "code" : "454401000016004",
            "display" : "PMI Sengeafsnit - Regionspsykiatri Midt"
          },
          {
            "code" : "454411000016002",
            "display" : "PMI Klinik for depression og mani - Midt"
          },
          {
            "code" : "454451000016003",
            "display" : "PMI Klinik for psykoser - Midt"
          },
          {
            "code" : "454461000016000",
            "display" : "PMI Klinik for retspsykiatri - Midt"
          },
          {
            "code" : "463791000016008",
            "display" : "PMI Sengeafsnit retspsykiatri - Viborg"
          },
          {
            "code" : "479221000016009",
            "display" : "PHO O1 Sengeafsnit Regionspsykiatri - Horsens"
          },
          {
            "code" : "486741000016006",
            "display" : "PRA Psykiatrisk Klinik 2 - Randers"
          },
          {
            "code" : "694221000016003",
            "display" : "Retspsykiatrisk Afdeling - AUH"
          },
          {
            "code" : "694231000016001",
            "display" : "RET Psykiatri Sengeafsnit for Retspsykiatri  - AUH"
          },
          {
            "code" : "694251000016006",
            "display" : "RET Retspsykiatrisk Klinik - AUH"
          },
          {
            "code" : "694681000016004",
            "display" : "BUA Klinik for Mentalobservation - AUH"
          },
          {
            "code" : "694841000016009",
            "display" : "ADA Klinik for Personlighedsforstyrrelser - AUH"
          },
          {
            "code" : "694891000016001",
            "display" : "ADA Klinik for Angst og OCD - AUH"
          },
          {
            "code" : "694901000016000",
            "display" : "ADA Klinik for PTSD og Transkulturel Psykiatri - AUH"
          },
          {
            "code" : "695161000016000",
            "display" : "AFP Psykiatri Sengeafsnit for Psykoser - AUH"
          },
          {
            "code" : "695251000016007",
            "display" : "AFP Psykiatrisk Klinik 1 - AUH"
          },
          {
            "code" : "695281000016003",
            "display" : "AFP Psykiatrisk Klinik 2 - AUH"
          },
          {
            "code" : "698861000016003",
            "display" : "Brø Amb Midtv. Affektiv"
          },
          {
            "code" : "886951000016001",
            "display" : "Psyk. Center Nordsjælland, overafd. - N4"
          },
          {
            "code" : "983041000016001",
            "display" : "Brø Amb Midtv. Hjør. Psykose"
          },
          {
            "code" : "983051000016003",
            "display" : "Brø Amb Midtv. Brøn. Psykose"
          }
        ]
      }
    ]
  }
}

```
