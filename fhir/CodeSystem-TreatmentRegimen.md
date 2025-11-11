# Treatment regimen - KIP Infrastructure v2.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Treatment regimen**

## CodeSystem: Treatment regimen 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/TreatmentRegimen | *Version*:2.13.0 |
| Active as of 2022-07-12 | *Computable Name*:TreatmentRegimen |

 
Treatment regimen 

 This Code system is referenced in the content logical definition of the following value sets: 

* [TreatmentRegimen](ValueSet-TreatmentRegimen.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "TreatmentRegimen",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/TreatmentRegimen",
  "version" : "2.13.0",
  "name" : "TreatmentRegimen",
  "title" : "Treatment regimen",
  "status" : "active",
  "date" : "2022-07-12T00:00:00+02:00",
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
  "description" : "Treatment regimen",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 37,
  "concept" : [
    {
      "code" : "toplusfem",
      "display" : "2+5 eller lign, eks. CT",
      "definition" : "2+5 eller lign, eks. CT"
    },
    {
      "code" : "aida",
      "display" : "AIDA",
      "definition" : "AIDA"
    },
    {
      "code" : "all_ved",
      "display" : "ALL vedligehold",
      "definition" : "ALL vedligehold"
    },
    {
      "code" : "atoatra",
      "display" : "ATO+ATRA",
      "definition" : "ATO+ATRA"
    },
    {
      "code" : "azacitidinmono",
      "display" : "Azacitidin monoterapi",
      "definition" : "Azacitidin monoterapi"
    },
    {
      "code" : "azacitidinvene",
      "display" : "Azacitidin-venetoclax",
      "definition" : "Azacitidin-venetoclax"
    },
    {
      "code" : "hydrea",
      "display" : "Hydrea",
      "definition" : "Hydrea"
    },
    {
      "code" : "hdara_c",
      "display" : "Hd-Ara-c +- supplement",
      "definition" : "Hd-Ara-c +- supplement"
    },
    {
      "code" : "ade",
      "display" : "ADE +- supplement",
      "definition" : "ADE +- supplement"
    },
    {
      "code" : "da",
      "display" : "DA +- supplement",
      "definition" : "DA +- supplement"
    },
    {
      "code" : "da31087",
      "display" : "DA inkl. 3+10, 3+8, 3+7",
      "definition" : "DA inkl. 3+10, 3+8, 3+7"
    },
    {
      "code" : "da31087my",
      "display" : "DA inkl. 3+10, 3+8, 3+7 + mylotarg",
      "definition" : "DA inkl. 3+10, 3+8, 3+7 + mylotarg"
    },
    {
      "code" : "da31087mi",
      "display" : "DA inkl. 3+10, 3+8, 3+7 + midostaurin",
      "definition" : "DA inkl. 3+10, 3+8, 3+7 + midostaurin"
    },
    {
      "code" : "flag",
      "display" : "FLAG +- supplement",
      "definition" : "FLAG +- supplement"
    },
    {
      "code" : "flagmito",
      "display" : "FLAG-Ida eller lign inkl FLAG, Mito-FLAG",
      "definition" : "FLAG-Ida eller lign inkl FLAG, Mito-FLAG"
    },
    {
      "code" : "flagmitovene",
      "display" : "FLAG-Ida eller lign inkl FLAG, Mito-FLAG + venetoclax",
      "definition" : "FLAG-Ida eller lign inkl FLAG, Mito-FLAG + venetoclax"
    },
    {
      "code" : "gilteritinib",
      "display" : "Gilteritinib",
      "definition" : "Gilteritinib"
    },
    {
      "code" : "idarac",
      "display" : "IdAraC",
      "definition" : "IdAraC"
    },
    {
      "code" : "inotuzumab",
      "display" : "Inotuzumab ozogamicin",
      "definition" : "Inotuzumab ozogamicin"
    },
    {
      "code" : "mace",
      "display" : "MACE +- supplement",
      "definition" : "MACE +- supplement"
    },
    {
      "code" : "midac",
      "display" : "MidAC",
      "definition" : "MidAC"
    },
    {
      "code" : "midostaurin_ved",
      "display" : "Midostaurin vedligehold",
      "definition" : "Midostaurin vedligehold"
    },
    {
      "code" : "ldara",
      "display" : "LdARA-C +- supplement",
      "definition" : "LdARA-C +- supplement"
    },
    {
      "code" : "atra",
      "display" : "ATRA",
      "definition" : "ATRA"
    },
    {
      "code" : "apl_mt",
      "display" : "APL-vedligeholdsbehandling",
      "definition" : "APL-vedligeholdsbehandling"
    },
    {
      "code" : "azacytidin_supplement",
      "display" : "5-Azacytidin +- supplement",
      "definition" : "5-Azacytidin +- supplement"
    },
    {
      "code" : "blinatumomab",
      "display" : "Blinatumomab",
      "definition" : "Blinatumomab"
    },
    {
      "code" : "vyxeos",
      "display" : "Vyxeos +- supplement",
      "definition" : "Vyxeos +- supplement"
    },
    {
      "code" : "nopho_2008",
      "display" : "NOPHO-2008",
      "definition" : "NOPHO-2008"
    },
    {
      "code" : "all_mt",
      "display" : "ALL vedligeholdelsesbehandling",
      "definition" : "ALL vedligeholdelsesbehandling"
    },
    {
      "code" : "other_ikke",
      "display" : "Anden ikke-intensiv",
      "definition" : "Anden ikke-intensiv"
    },
    {
      "code" : "other_eks",
      "display" : "Anden eksperimentel",
      "definition" : "Anden eksperimentel"
    },
    {
      "code" : "other_semi",
      "display" : "Anden semiintensiv (f.eks. Plan B)",
      "definition" : "Anden semiintensiv (f.eks. Plan B)"
    },
    {
      "code" : "other_int",
      "display" : "Anden intensiv (f.eks. BISHOP, Plan A)",
      "definition" : "Anden intensiv (f.eks. BISHOP, Plan A)"
    },
    {
      "code" : "hyper_cvad",
      "display" : "Hyper-CVAD",
      "definition" : "Hyper-CVAD"
    },
    {
      "code" : "alltogether_mt",
      "display" : "ALLtogether",
      "definition" : "ALLtogether"
    },
    {
      "code" : "experimental",
      "display" : "anden behl incl anden experimentel",
      "definition" : "anden behl incl anden experimentel"
    }
  ]
}

```
