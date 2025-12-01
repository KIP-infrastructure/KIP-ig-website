# EDTA koder Transplantation (DNSL) - KIP Infrastructure v2.14.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EDTA koder Transplantation (DNSL)**

## ValueSet: EDTA koder Transplantation (DNSL) (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/EDTATransplantationDNSL | *Version*:2.14.2 |
| Active as of 2024-01-10 | *Computable Name*:EDTATransplantationDNSL |

 
EDTA koder Transplantation (DNSL) 

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
  "id" : "EDTATransplantationDNSL",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/EDTATransplantationDNSL",
  "version" : "2.14.2",
  "name" : "EDTATransplantationDNSL",
  "title" : "EDTA koder Transplantation (DNSL)",
  "status" : "active",
  "experimental" : true,
  "date" : "2024-01-10T00:00:00+02:00",
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
  "description" : "EDTA koder Transplantation (DNSL)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/EDTACodes",
        "concept" : [
          {
            "code" : "EDTA70",
            "display" : "EDTA 70, Grafttab, irreversibelt (årsag ukendt)"
          },
          {
            "code" : "EDTA71",
            "display" : "EDTA 71, Grafttab, hyperakut rejektion"
          },
          {
            "code" : "EDTA72",
            "display" : "EDTA 72, Grafttab, rejektion (med immunosuppressiv beh.)"
          },
          {
            "code" : "EDTA73",
            "display" : "EDTA 73, Grafttab, rejektion (uden immunosuppressiv beh.)"
          },
          {
            "code" : "EDTA74",
            "display" : "EDTA 74, Grafttab, reccurent primær renal lidelse"
          },
          {
            "code" : "EDTA75",
            "display" : "EDTA 75, Grafttab, vasculær/ureter operativt problem"
          },
          {
            "code" : "EDTA76",
            "display" : "EDTA 76, Grafttab, vasculær thrombose uden op problem"
          },
          {
            "code" : "EDTA77",
            "display" : "EDTA 77, Grafttab, infektion"
          },
          {
            "code" : "EDTA78",
            "display" : "EDTA 78, Grafttab, fjernelse af fungerende graft"
          },
          {
            "code" : "EDTA79",
            "display" : "EDTA 79, Grafttab, ikke-fungerende graft"
          }
        ]
      }
    ]
  }
}

```
