# Behandlingsplan (2025) - KIP Infrastructure v2.16.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Behandlingsplan (2025)**

## ValueSet: Behandlingsplan (2025) (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/TreatmentRegimen-2025 | *Version*:2.16.0 |
| Active as of 2025-10-31 | *Computable Name*:TreatmentRegimen2025 |

 
Behandlingsplan som beskriver specifikke codsering og planlægningen af behandling 

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
  "id" : "TreatmentRegimen-2025",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/TreatmentRegimen-2025",
  "version" : "2.16.0",
  "name" : "TreatmentRegimen2025",
  "title" : "Behandlingsplan (2025)",
  "status" : "active",
  "experimental" : true,
  "date" : "2025-10-31T00:00:00+02:00",
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
  "description" : "Behandlingsplan som beskriver specifikke codsering og planlægningen af behandling",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/TreatmentRegimen",
        "concept" : [
          {
            "code" : "hdara_c",
            "display" : "HdAraC"
          },
          {
            "code" : "da31087",
            "display" : "DA inkl. 3+10, 3+8, 3+7"
          },
          {
            "code" : "da31087my",
            "display" : "DA inkl. 3+10, 3+8, 3+7 + mylotarg"
          },
          {
            "code" : "da31087mi",
            "display" : "DA inkl. 3+10, 3+8, 3+7 + midostaurin"
          },
          {
            "code" : "flagmito",
            "display" : "FLAG-Ida eller lign. inkl. FLAG, Mito-FLAG"
          },
          {
            "code" : "flagmitovene",
            "display" : "FLAG-Ida eller lign. inkl. FLAG, Mito-FLAG + venetoclax"
          },
          {
            "code" : "idarac",
            "display" : "IdAraC"
          },
          {
            "code" : "apl_mt",
            "display" : "APL vedligehold"
          },
          {
            "code" : "azacitidinmono",
            "display" : "Azacitidin monoterapi"
          },
          {
            "code" : "blinatumomab",
            "display" : "Blinatumunab"
          },
          {
            "code" : "vyxeos",
            "display" : "Vyxeos"
          },
          {
            "code" : "nopho_2008",
            "display" : "NOPHO 2008"
          },
          {
            "code" : "atoatra",
            "display" : "ATO+ATRA"
          },
          {
            "code" : "aida",
            "display" : "AIDA"
          },
          {
            "code" : "azacitidinvene",
            "display" : "Azacitidin-venetoclax"
          },
          {
            "code" : "toplusfem",
            "display" : "2+5 eller lign, eks. CT"
          },
          {
            "code" : "gilteritinib",
            "display" : "Gilteritinib"
          },
          {
            "code" : "midostaurin_ved",
            "display" : "Midostaurin vedligehold"
          },
          {
            "code" : "inotuzumab",
            "display" : "Inotuzumab ozogamicin"
          },
          {
            "code" : "all_ved",
            "display" : "ALL vedligehold"
          },
          {
            "code" : "hyper_cvad",
            "display" : "Hyper-CVAD"
          },
          {
            "code" : "alltogether_mt",
            "display" : "ALLtogether"
          },
          {
            "code" : "other_ikke",
            "display" : "Anden ikke-intensiv"
          },
          {
            "code" : "other_eks",
            "display" : "Anden eksperimentel"
          },
          {
            "code" : "other_semi",
            "display" : "Anden semiintensiv (f.eks. Plan B)"
          },
          {
            "code" : "other_int",
            "display" : "Anden intensiv (f.eks. BISHOP, Plan A)"
          }
        ]
      }
    ]
  }
}

```
