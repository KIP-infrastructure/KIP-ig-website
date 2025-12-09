# SKS: Operationer (KAR) - KIP Infrastructure v2.17.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **SKS: Operationer (KAR)**

## ValueSet: SKS: Operationer (KAR) (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/SKSOperationerKAR | *Version*:2.17.1 |
| Active as of 2022-09-27 | *Computable Name*:SKSOperationerKAR |

 
SKS: Operationer (KAR) 

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
  "id" : "SKSOperationerKAR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/SKSOperationerKAR",
  "version" : "2.17.1",
  "name" : "SKSOperationerKAR",
  "title" : "SKS: Operationer (KAR)",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-09-27T00:00:00+02:00",
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
  "description" : "SKS: Operationer (KAR)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SKS",
        "concept" : [
          {
            "code" : "KJAH00",
            "display" : "KJAH00"
          },
          {
            "code" : "KPAF20",
            "display" : "KPAF20"
          },
          {
            "code" : "KPAF21",
            "display" : "KPAF21"
          },
          {
            "code" : "KPAF22",
            "display" : "KPAF22"
          },
          {
            "code" : "KPAK21",
            "display" : "KPAK21"
          },
          {
            "code" : "KPAP10",
            "display" : "KPAP10"
          },
          {
            "code" : "KPAP20",
            "display" : "KPAP20"
          },
          {
            "code" : "KPAP21",
            "display" : "KPAP21"
          },
          {
            "code" : "KPAP30",
            "display" : "KPAP30"
          },
          {
            "code" : "KPAP99",
            "display" : "KPAP99"
          },
          {
            "code" : "KPBP10",
            "display" : "KPBP10"
          },
          {
            "code" : "KPBP20",
            "display" : "KPBP20"
          },
          {
            "code" : "KPBP99",
            "display" : "KPBP99"
          },
          {
            "code" : "KPBQ10",
            "display" : "KPBQ10"
          },
          {
            "code" : "KPBQ20",
            "display" : "KPBQ20"
          },
          {
            "code" : "KPBQ99",
            "display" : "KPBQ99"
          },
          {
            "code" : "KPCG10",
            "display" : "KPCG10"
          },
          {
            "code" : "KPCP10",
            "display" : "KPCP10"
          },
          {
            "code" : "KPCP20",
            "display" : "KPCP20"
          },
          {
            "code" : "KPCP30",
            "display" : "KPCP30"
          },
          {
            "code" : "KPCP40",
            "display" : "KPCP40"
          },
          {
            "code" : "KPCP40A",
            "display" : "KPCP40A"
          },
          {
            "code" : "KPCP99",
            "display" : "KPCP99"
          },
          {
            "code" : "KPCQ10",
            "display" : "KPCQ10"
          },
          {
            "code" : "KPCQ20",
            "display" : "KPCQ20"
          },
          {
            "code" : "KPCQ30",
            "display" : "KPCQ30"
          },
          {
            "code" : "KPCQ40",
            "display" : "KPCQ40"
          },
          {
            "code" : "KPCQ99",
            "display" : "KPCQ99"
          },
          {
            "code" : "KPCU83",
            "display" : "KPCU83"
          },
          {
            "code" : "KPCU84",
            "display" : "KPCU84"
          },
          {
            "code" : "KPCW20",
            "display" : "KPCW20"
          },
          {
            "code" : "KPDA10",
            "display" : "KPDA10"
          },
          {
            "code" : "KPDG10",
            "display" : "KPDG10"
          },
          {
            "code" : "KPDG20",
            "display" : "KPDG20"
          },
          {
            "code" : "KPDG21",
            "display" : "KPDG21"
          },
          {
            "code" : "KPDG22",
            "display" : "KPDG22"
          },
          {
            "code" : "KPDG23",
            "display" : "KPDG23"
          },
          {
            "code" : "KPDG24",
            "display" : "KPDG24"
          },
          {
            "code" : "KPDP10",
            "display" : "KPDP10"
          },
          {
            "code" : "KPDP30",
            "display" : "KPDP30"
          },
          {
            "code" : "KPDQ10",
            "display" : "KPDQ10"
          },
          {
            "code" : "KPDQ20",
            "display" : "KPDQ20"
          },
          {
            "code" : "KPDQ21",
            "display" : "KPDQ21"
          },
          {
            "code" : "KPDU83",
            "display" : "KPDU83"
          },
          {
            "code" : "KPDU84",
            "display" : "KPDU84"
          },
          {
            "code" : "KPDW20",
            "display" : "KPDW20"
          },
          {
            "code" : "KPEH20",
            "display" : "KPEH20"
          },
          {
            "code" : "KPEH30",
            "display" : "KPEH30"
          },
          {
            "code" : "KPEP10",
            "display" : "KPEP10"
          },
          {
            "code" : "KPEP11",
            "display" : "KPEP11"
          },
          {
            "code" : "KPEP12",
            "display" : "KPEP12"
          },
          {
            "code" : "KPEQ10",
            "display" : "KPEQ10"
          },
          {
            "code" : "KPEQ11",
            "display" : "KPEQ11"
          },
          {
            "code" : "KPEQ12",
            "display" : "KPEQ12"
          },
          {
            "code" : "KPEQ99",
            "display" : "KPEQ99"
          },
          {
            "code" : "KPEU83",
            "display" : "KPEU83"
          },
          {
            "code" : "KPEU84",
            "display" : "KPEU84"
          },
          {
            "code" : "KPFH20",
            "display" : "KPFH20"
          },
          {
            "code" : "KPFH21",
            "display" : "KPFH21"
          },
          {
            "code" : "KPFH22",
            "display" : "KPFH22"
          },
          {
            "code" : "KPFH23",
            "display" : "KPFH23"
          },
          {
            "code" : "KPFH24",
            "display" : "KPFH24"
          },
          {
            "code" : "KPFH25",
            "display" : "KPFH25"
          },
          {
            "code" : "KPFH26",
            "display" : "KPFH26"
          },
          {
            "code" : "KPFH27",
            "display" : "KPFH27"
          },
          {
            "code" : "KPFH28",
            "display" : "KPFH28"
          },
          {
            "code" : "KPFH29",
            "display" : "KPFH29"
          },
          {
            "code" : "KPFH99",
            "display" : "KPFH99"
          },
          {
            "code" : "KPFP10",
            "display" : "KPFP10"
          },
          {
            "code" : "KPFP30",
            "display" : "KPFP30"
          },
          {
            "code" : "KPFQ10",
            "display" : "KPFQ10"
          },
          {
            "code" : "KPFQ30",
            "display" : "KPFQ30"
          },
          {
            "code" : "KPFU83",
            "display" : "KPFU83"
          },
          {
            "code" : "KPFU84",
            "display" : "KPFU84"
          },
          {
            "code" : "KPGU83",
            "display" : "KPGU83"
          },
          {
            "code" : "KPGU84",
            "display" : "KPGU84"
          }
        ]
      }
    ]
  }
}

```
